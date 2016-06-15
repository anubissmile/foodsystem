<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>สรุปยอดขาย</title>
	<link rel="stylesheet" href="{{ asset('food_asset/style.css') }}">

</head>
<body class="fontbj">
	<h3 class="fontbj">{{ $title }}</h3>
	<hr>
    <table class="normal-table tb-all-orders">
      <thead class="head-all-orders fontbj">
        <tr>
          <td>{{ count($dataset) }} รายการ</td>
          <td>ราคา</td>
        </tr>
      </thead>
      <tbody class="body-all-orders fontbj">
      @foreach($dataset as $data)
        <tr>
          <td>{{$data->list}}</td>
          <td>{{$data->price}}</td>
        </tr>
      @endforeach
      </tbody>
      <tfoot class="fontbj">
      	<tr>
      		<td>รวมทั้งสิ้น {{ $sumtotal }} บาท</td>
      		<td></td>
      	</tr>
      </tfoot>
    </table>
</body>
</html>