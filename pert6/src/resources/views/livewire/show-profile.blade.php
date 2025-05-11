<div>
  @foreach ($employees as $employee)
      <div class="card">
          <img src="{{ asset('storage/' . $employee->photo) }}" alt="">
          <h3>{{ $employee->name }}</h3>
          <p>{{ $employee->position }}</p>
          <p>{{ $employee->division }}</p>
          <p><i class="fa fa-map-marker"></i> {{ $employee->city }}</p>
          <p><i class="fa fa-calendar"></i> {{ \Carbon\Carbon::parse($employee->birthdate)->format('d M Y') }}</p>
      </div>
  @endforeach
</div>
