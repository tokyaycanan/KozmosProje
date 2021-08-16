<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js">  </script>
  <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js">  </script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Guncel Siparisler</h2>
  <div class="panel panel-primary">
    <div class="panel-heading">Siparisler</div>
    <div class="panel-body">
      <table class="table">
      <thead>
        <tr>
          <th>SIPARIS NO </th>
          <th>URUN KODU</th>
          <th>ADET</th>
          <th>MUSTERİ ID</th>
        </tr>
      </thead>
      <tbody>
     @foreach ($siparis as $sprs)
        <tr>
          <td>{{$sprs->SiparisNo}}</td>
          <td>{{$sprs-> UrunKodu}}</td>
          <td>{{$sprs->Adet}}</td>
          <td>{{$sprs->MusteriId}}</td>
          <td>
            <a href="{{route('siparisler.edit',$sprs-> SiparisNo)}}" class="btn btn-sm btn-primary">edit<i class="fa fa-edit"></i> </a>
            <a href="{{route('siparisler.destroy',$sprs-> SiparisNo)}}" class="btn btn-sm btn-danger">delete<i class="fa fa-times"></i> </a>
          </td>
        </tr>
        @endforeach

      </tbody>
      {{ $siparis->links() }}
       </table>

    </div>
  </div>
</div>

</body>
</html>
