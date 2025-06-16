  {{-- resources/views/home.blade.php --}}
@php
  use App\Models\PageConfig;
  $config = PageConfig::first();
@endphp

@php
  use App\Models\Product;
  $product = Product::orderBy('id')->get();
@endphp

<main>
  {{-- Banner Section --}}
  <section class="banner bg-tertiary position-relative overflow-hidden">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="block text-center text-lg-start pe-0 pe-xl-5">
            <h1 class="text-capitalize mb-4">{{ $config->title ?? '' }}</h1>
            <p class="mb-4">{{ $config->detail ?? '' }}</p>
            <a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#applyLoan">See More<span style="font-size: 14px;" class="ms-2 fas fa-arrow-right"></span></a>
            </a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="ps-lg-5 text-center">
            <img loading="lazy" decoding="async"
              src="{{ asset('front/assets/kantor.jpg') }}"
              alt="banner image"
              class="img-fluid rounded shadow-lg w-75"
              style="max-height: 400px; object-fit: cover;">
          </div>
        </div>
      </div>
    </div>
    {{-- Shapes --}}
    <div class="has-shapes">
      <!-- [SVG shapes, same as sebelumnya — bisa dihapus jika tidak perlu] -->
    </div>
  </section>

  {{-- Product Section --}}
  <section class="py-5">
    <div class="container">
      <div class="row">
        @foreach ($product as $index => $item)
          <div class="col-lg-4 col-md-6 mb-4 service-item">
            <a class="text-black text-decoration-none" href="#">
              <div class="block">
                <span class="colored-box text-center h3 mb-4">
                  {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                </span>
                @if ($item->image)
                  <div class="overflow-hidden rounded-lg shadow-lg" style="max-height: 400px;">
                    <img
                      loading="lazy"
                      decoding="async"
                      src="{{ asset('storage/' . $item->image) }}"
                      alt="{{ $item->name }}"
                      class="img-fluid w-100 transition-transform"
                      style="object-fit: cover; height: 100%;"
                      onmouseover="this.style.transform='scale(1.05)'"
                      onmouseout="this.style.transform='scale(1)'"
                    >
                  </div>
                @endif
              </div>
              <h3 class="mb-3 service-title">{{ $item->name }}</h3>
              <p class="mb-0 service-description">{{ $item->description }}</p>
            </a>
          </div>
        @endforeach
      </div>
    </div>
  </section>
</main>
      