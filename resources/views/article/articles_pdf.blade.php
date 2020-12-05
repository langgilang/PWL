<!DOCTYPE html>
<html>
    <head>
        <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
    </head>
<style type="text/css">
  #outtable{
    padding: 20px;
    border:1px solid #e3e3e3;
    width:600px;
    border-radius: 5px;
  }

  .short{
    width: 50px;
  }

  .normal{
    width: 150px;
  }
    table{
      border-collapse: collapse;
      font-family: arial;
      color:#5E5B5C;
    }

    thead th{
      text-align: left;
      padding: 10px;
    }

    tbody td{
      border-top: 1px solid #e3e3e3;
      padding: 10px;
    }

    tbody tr:nth-child(even){
      background: #F6F5FA;
    }

    tbody tr:hover{
      background: #EAE9F5
    }
</style>
<body>
    <center>
        <h4>LAPORAN ARTIKEL</h4>
    </center>
    <table>
        <thead>
            <tr>
                <th class="short">No</th>
                <th class="normal">Title</th>
                <th class="normal">Content</th>
            </tr>
        </thead>
    <tbody>
        @php $i=1 @endphp
        @foreach($article as $a)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{$a->title}}</td>
                <td>{{$a->content}}</td>
            </tr>
        @endforeach
    </tbody>
    </table>
</body>
</html>