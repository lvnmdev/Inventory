<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>Product Name</th>
      <th>Type</th>
      <th>Stock</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($showdata->result() as $row) { ?>
    <tr>
      <td><?php echo $row->prodname; ?></td>
      <td><?php echo $row->prodtype_name; ?></td>
      <td><?php echo $row->stock; ?></td>
      <td></td>
    </tr>
  <?php } ?>
  </tbody>
</table>