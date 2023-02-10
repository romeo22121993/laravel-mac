<h2>Hello, It's notification from observer {{ now() }}</h2>
<br>

<strong>Order {{ $data->id  }} is just {{ $action }} </strong><br>

<strong>Details: </strong><br>
<strong>Email: </strong>{{ $data->email }} <br>
<strong>Client Name: </strong>{{ $data->name }} <br>
<strong>Phone: </strong>{{ $data->phone }} <br>
<strong>Post Code: </strong>{{ $data->post_code }} <br><br>
<strong>Notes: </strong>{{ $data->notes }} <br><br>

<strong>Total Amount: </strong>{{ $data->amount }} <br><br>
<strong>Total Price: </strong>{{ $data->total_price }}$ <br><br>
<strong>Invoice Number: </strong>{{ $data->invoice_no }} <br><br>
<strong>Company: </strong>{{ $data->company }} <br><br>


Thank you
