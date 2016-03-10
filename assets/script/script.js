$(function(){

  //user data 
  var table_user = $('#user-data').DataTable( {
        "processing": true,
        "aaSorting": [[0,'desc']],
        "ajax": {
        	url:Route+"store/user/get",
        	dataSrc:'',
        },
        "columns": [
            { "data": "id" },
            { "data": "m_name" },
            { "data": "m_type" },
            { "data": "m_active" },
            { "data": "m_code" },
            { "data": "m_mail" },
            { "data": "m_guide" },
            { "data": "m_level" },
            { "data": "m_date_register" },
            {
                data: null,
                defaultContent: ''+
                '<a href="#" class="user_reven btn btn-info "><i class="fa fa-pencil"></i> สมาชิก</a>'+
                '<a href="#" class="team_reven btn btn-info "><i class="fa fa-pencil"></i> ทีม</a>'+
                '<a href="#" class="edit btn btn-info "><i class="fa fa-pencil"></i> แก้ไข</a>'+
                '<a href="#" class="remove btn btn-danger "><i class="fa fa-remove"></i> ลบ</a>',
                orderable: true
            },
        ],
    } );

  	$('#user-data').on( 'click', 'a.user_reven', function (e) {
        var data = table_user.row( $(this).parents('tr') ).data();
            window.user=Route+"store/user/user_reven/"+data.id;
        return false;
    } );

    $('#user-data').on( 'click', 'a.team_reven', function (e) {
        var data = table_user.row( $(this).parents('tr') ).data();
            window.user=Route+"store/user/team_reven/"+data.id;
        return false;
    } );

    $('#user-data').on( 'click', 'a.remove', function (e) {
        var data = table_user.row( $(this).parents('tr') ).data();
        var text = 'Confirm!!';
        if(confirm(text)==true){
        	window.user=Route+"store/user/delete/"+data.id;
        }
        return false;
    } );


    $('#user-data').on( 'click', 'a.edit', function (e) {
        var data = table_user.row( $(this).parents('tr') ).data();
        	window.user=Route+"store/user/edit/"+data.id;
        return false;
    } );

     // Setup - add a text input to each footer cell
    $('#user-data tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" class="form-control" placeholder="ค้นหา '+title+'" />' );
    } );

    table_user.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );






});