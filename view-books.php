<h1>Books</h1> 
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
 <th>ID</th>
    <th>Title</th>
      <th>Author</th>
      <th>ISBN</th>
      </tr>
     
    </thead>
    <tbody>
    <?php
     while ($book = $books->fetch_assoc()) { 
       ?>
       <tr>
       <td><?php echo $books['book_id']; ?></td>
       <td><?php echo $books['title']; ?></td>
        <td><?php echo $books['author']; ?></td>
         <td><?php echo $books['isbn']; ?></td>
       </tr>
       <?php
     }

   ?> 

      
    </tbody>
  </table>
</div>
