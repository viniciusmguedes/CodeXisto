<div>

  <h2>Produto</h2>

  <p style="color: gray;">
    Produto:    {{ ucfirst($data['product']) }}  <br>
    Categoria:  {{ ucfirst($data['category']) }} <br>
    Estado:     {{ ucfirst($data['status']) }}   <br>
    Preço:      {{ ucfirst($data['price']) }}    <br>
    <br>
    <b>Descrição:</b>
    <br>
    {{ ucfirst($data['description']) }}
    <br>
  </p>

  <hr>

  <h2>Vendedor(a)</h2>

  <p style="color: gray;">
    Nome:         {{ $data['name'] }}         <br>
    E-mail:       {{ $data['email'] }}        <br>
    Telefone:     {{ $data['phone'] }}        <br>
    Celular:      {{ $data['cell_phone'] }}   <br>
    Endereço:     {{ $data['address'] }}      <br>
    Cidade:       {{ $data['city'] }}         <br>
    Estado:       {{ $data['state'] }}        <br>
    Code Postal:  {{ $data['zipcode'] }}      <br>
  </p>

</div>
