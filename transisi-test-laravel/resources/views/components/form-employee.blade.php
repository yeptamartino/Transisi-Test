@props([ 
  'action' => '',
  'name' => '',
  'email' => '',
  'id' => null,
  'company' => [],
  'selectedCompanyId' => '',
])

<form id="app" action="{{ $action }}" method="POST" enctype="multipart/form-data">
  @if($id)
    @method('PUT')
  @endif
  @csrf

  <x-input
    name="name"
    label="Nama Emloyee"
    :value="$name"
  />

  <x-input
  
    name="email"
    label="Email"
    :value="$email"
    type="email"
  />

  <div class="form-group">
    <label for="company_id">Company*</label>
    <select v-model="selectedCompanyId" v-on:change="onSelectedCategoryChanged" name="company_id" class="form-control" required>
      <option disabled value="">--- PILIH COMPANY ---</option>
      @foreach($company as $c)
        <option value="{{ $c->id }}">{{$c->name}}</option>
      @endforeach
    </select>
  </div>
  

  @if($id)
    <x-button>
      Ubah Employee
    </x-button>
  @else
    <x-button>
      Tambah Employee
    </x-button>
  @endif
