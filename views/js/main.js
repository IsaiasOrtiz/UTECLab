$(document).ready(function() {
  /**Menu Toggle**/
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  /**Login Admin**/
    function validarIngreso() {
      var expresion = /^[a-zA-Z0-9]*$/;
      if(!expresion.test($("#usuarioIngreso".val()))) {
        return false;
      } 
      if(!expresion.test($("#passIngreso".val()))) {
        return false;
      }
      return true;
    }
});
