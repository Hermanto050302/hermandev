<?php

include '../config.php';

$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM tb_experience WHERE id=$id");

echo "<script>
alert('Data berhasil diedit');
window.location.href='../admin/work.php';
</script>";

?>