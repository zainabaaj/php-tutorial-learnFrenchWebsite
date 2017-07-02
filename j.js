(
    function() {
        window.onload = function() {

            document.getElementById("but").onclick = login;
            document.getElementById("sil").onclick = del;



        }

        ;

        function login() {
            var modal = document.getElementById('id01');
            //if (event.target == modal) {

            modal.style.display = "block";
            // }
        }



    })();

// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//     if (event.target == modal) {

//     }
// }