@props([ 
  'action' => '',
  'thumbnail' =>'' ,
  'name' => '',
  'email' => '',
  'website' => '',
  'id' => null,
])

<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
  @if($id)
    @method('PUT')
  @endif
  @csrf

  <x-input-files
    name="thumbnail"
    label="Logo"    
  />

  @if($thumbnail)
    <img class="img img-responsive" src="{{ asset('images/'.$thumbnail) }}" style="max-width: 28em;" />
  @endif
    <p style="color:blue">*Rekomendasi ukuran minimum 100 x 100 px</p>

  <x-input
    name="name"
    label="Nama Comapany"
    :value="$name"
  />

  <x-input
    name="email"
    label="Email"
    :value="$email"
    type="email"
  />

  <x-input
    name="website"
    label="Website"
    :value="$website"
  />

  @if($id)
    <x-button>
    Ubah Company
    </x-button>
  @else
    <x-button>
    Tambah Company
    </x-button>
  @endif
</form>