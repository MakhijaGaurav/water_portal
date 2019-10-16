           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>SR.NO</th>
        <th>Family Id</th>
        <th>Liters</th>
        <th>Amount</th>
        <th>Start</th>
        <th>Last</th>
        <th>Paid</th>
      </tr>
    </thead>
    <tbody>
      @foreach($bills as $bill)
      <tr>
        <td>{{ $bill-> bill_id }}</td>
        <td>{{ $bill-> family_id }}</td>
        <td>{{ $bill-> litres_consumed }}</td>
        <td> {{ $bill-> bill_amount }}</td>
        <td>{{ $bill-> bill_start_date }}</td>
        <td>{{ $bill-> bill_end_date }}</td>
        <td>{{ $bill-> bill_paid }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
