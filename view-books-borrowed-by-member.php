<h1>Books Borrowed</h1> 
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
         <th>Date Taken</th>
          <th>Librarian</th>
         <th>Return Date</th>
    
      </tr>
     
    </thead>
    <tbody>
    <?php
     while ($borrowedbook = $borrowedbooks->fetch_assoc()) { 
       ?>
       <tr>
       <td><?php echo $borrowedbook['borrow_id']; ?></td>
       <td><?php echo $borrowedbook['date_borrowed']; ?></td>
        <td><?php echo $borrowedbook['librarian']; ?></td>
         <td><?php echo $borrowedbook['return_date']; ?></td>
       </tr>
       <?php 
     }

   ?> 

      
    </tbody>
  </table>
</div>
