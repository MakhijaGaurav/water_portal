 <table class="table table-striped">
     <thead>
         <tr>
             <th>SR.NO</th>
             <th>First Name</th>
             <th>Last Name</th>
             <th>Family Id</th>
             <th>Registerd On</th>
         </tr>
     </thead>
     <tbody>
        @foreach($members  as $member)
         <tr>
            
             <td>{{ $member->member_id }}</td>
             <td>{{ $member-> member_first_name }}</td>
             <td>{{ $member->member_last_name }}</td>
             <td>{{ $member-> family_id}}</td>
             <td>{{ $member-> created_at }}</td>
         </tr>
         @endforeach
     </tbody>
 </table>
