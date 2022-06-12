document.getElementById("id_produit").addEventListener("change", function (e) {
  let id = e.target.value;
  let url = "chef.php?" + (id != 0 ? "id_produit=" + id : "");
  window.location.href = url;
});
