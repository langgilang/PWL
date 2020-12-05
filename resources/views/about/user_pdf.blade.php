<!DOCTYPE html>
<html>
    <head>
        <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
    </head>
<body>
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
    <center>
        <h4>LAPORAN DATA USER</h4>
    </center>
    <table class='table table-bordered'>
    <thead>
        <tr>
            <th class="short">No</th>
            <th class="normal">NIM</th>
            <th class="normal">NAMA</th>
            <th class="normal">ALAMAT</th>
        </tr>
    </thead>
    <tbody>
        @php $i = 1 @endphp
        @foreach($about as $a)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $a->nim }}</td>
                <td>{{ $a->nama }}</td>
                <td>{{ $a->alamat }}</td>
            </tr>
        @endforeach
    </tbody>
    </table>
</body>
</html>