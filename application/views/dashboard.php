
<?php 
$nama = $this->session->userdata("nama");
if (is_null($nama))
{
	redirect(base_url('login/salah'));
}
else
{
    echo "test ja mau kaada";
}
?>
