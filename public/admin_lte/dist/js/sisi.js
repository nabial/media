$(document).ready(function() {
    //standart datatable
    $('#mydatatables').DataTable({
        "sScrollX": "100%",
        "sScrollXInner": "100%",    
        show: true,
        // dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
      });


    // advance datatable
    $('#mydatatables2 thead tr').clone(true).appendTo( '#mydatatables2 thead' );
    $('#mydatatables2 thead tr:eq(1) th').each( function (i) {
        
      var title = $(this).text();
      $(this).html( '<input type="text" placeholder="Search '+title+'" />' );

      $( 'input', this ).on( 'keyup change', function () {
          if ( table.column(i).search() !== this.value ) {
              table
                  .column(i)
                  .search( this.value )
                  .draw();
          }
      } );
    });

  var table = $('#mydatatables2').DataTable( {
      orderCellsTop: true,
      fixedHeader: true,
      paging: true,
      searching: true,
      "sScrollX": "100%",
      "sScrollXInner": "100%",    
      show: true,
      // dom: 'Bfrtip',
      buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
  } );
} );

