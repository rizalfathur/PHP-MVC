$(function() {

    $('.tombolTambahData').on('click', function(){
        $('#judulModal').html('Add a new Car');
        $('.modal-footer button[type=submit]').html('Add');

    });

    $('.tampilModalUbah').on('click', function(){
        $('#judulModal').html('Change Car Data');
        $('.modal-footer button[type=submit]').html('Change');
        
        const id = $(this).data('id');
        console.log(id);

        $.ajax({
            url: 'http://localhost/PHPMVC/cars/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#name').val(data.name);
                $('#power').val(data.power);
                $('#torque').val(data.torque);
                $('#topspeed').val(data.topspeed);
                $('#price').val(data.price);
                console.log(data);
            }
        });
    });

});