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
     while ($librarymember = $member->fetch_assoc()) { 
       ?>
       <tr>
       <td><?php echo $librarymember['member_id']; ?></td>
       <td><?php echo $librarymember['member_name']; ?></td>
        <td><?php echo $librarymember['address']; ?></td>
         <td><?php echo $librarymember['email']; ?></td>
          <td><a href="<?php echo http://homew3.ikon.oucreate.com/books.php; ?>?member_id=<?php echo $librarymember['member_id']; ?>">bookread</a></td>
       </tr>
       <?php
     }

   ?> 

      
    </tbody>
  </table>
</div>
