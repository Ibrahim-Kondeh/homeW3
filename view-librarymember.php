<h1>Library Members </h1> 
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
 <th>ID</th>
    <th>Name</th>
      <th>Address</th>
      <th>Email</th>
      </tr>
     
    </thead>
    <tbody>
    <?php
     while ($member = $librarymember->fetch_assoc()) { 
       ?>
       <tr>
       <td><?php echo $member['member_id']; ?></td>
       <td><?php echo $member['member_name']; ?></td>
        <td><?php echo $member['address']; ?></td>
         <td><?php echo $member['email']; ?></td>
       </tr>
       <?php
     }

   ?> 

      
    </tbody>
  </table>
</div>
