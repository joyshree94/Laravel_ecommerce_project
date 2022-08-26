<!DOCTYPE html>
<html lang="en">
  <head>
      @include('admin.css')
      <style type="text/css">

        .title_deg{
            text-align: center;
            font-size: 25px;
            font-weight:bold;
            padding-bottom: 40px;
        }
        .table_deg
        {
            border: 2px solid white;
            width: :100%;
            margin:auto;
            text-align:center;
        }
        .th_deg
        {
            background: skyblue;
        }
        .th_deg th
        {
            padding: 5px;
        
        }
      </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                    <h1 class="title_deg">All Orders</h1>
                    <table class="table_deg">
                        <tr class="th_deg"> 	
                            <th style="padding: 10px;">Name</th>
                            <th style="padding: 10px;">Email</th>
                            <th style="padding: 10px;">Address</th>
                            <th style="padding: 10px;">Phone</th>
                            <th style="padding: 10px;">Product Title</th>
                            <th style="padding: 10px;">Quantity</th>
                            <th style="padding: 10px;">Price</th>
                            <th style="padding: 10px;">Payment Status</th>
                            <th style="padding: 10px;">Delivery Status</th>
                            <th style="padding: 10px;">Image </th>
                            <th style="padding: 10px;">Delivered </th>
                        
                        </tr>
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->name }}</td>
                            <td>{{ $order->email }}</td>
                            <td>{{ $order->address }}</td>
                            <td>{{ $order->phone }}</td>
                            <td>{{ $order->product_title }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>{{ $order->price }}</td>
                            <td>{{ $order->payment_status }}</td>
                            <td>{{ $order->delivery_status }}</td>
                            <td>
                            <img src="/product/{{ $order->image }}" alt="image" height="100px" width="100px">
                            </td>
                            <td>
                                @if ($order->delivery_status == "processing")
                                <a href="{{ url('delivery',$order->id) }}" onclick="return confirm('Are you sure to delete this category')"  class="btn btn-primary">Delivered</a>
                              
                                @else
                                <p style="color:green;">delivered</p>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </table>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>