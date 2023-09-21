		<script type="text/javascript">
            jQuery(function(){
                jQuery("#adisoyadi").validate({
                    expression: "if (VAL) return true; else return false;"
                });
				
                jQuery("#telefon").validate({
                    expression: "if (VAL) return true; else return false;"
                });
				
                jQuery("#konu").validate({
                    expression: "if (VAL) return true; else return false;"
                });
				
                jQuery("#mesaj").validate({
                    expression: "if (VAL) return true; else return false;"
                });
				
                jQuery("#ucusno").validate({
                    expression: "if (VAL) return true; else return false;"
                });
				
                jQuery("#ucusfirmasi").validate({
                    expression: "if (VAL) return true; else return false;"
                });
				
                jQuery("#eposta").validate({
                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;"
                });
				
				jQuery("#kisiSayisi").validate({
                    expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
                    message: "Please enter a valid number"
                });
            });
        </script>