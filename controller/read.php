
<link rel="stylesheet" href="assets/css/prism.min.css"/>

<?php
include("../ajax/db_connection.php");
    $query = "SELECT * FROM tb_xml ORDER BY id DESC";


    $result = mysqli_query($mysqli,$query);
    if (!$result) {
        echo mysqli_error($mysqli);
    }

    if(mysqli_num_rows($result) > 0)
    {

    $data = '<pre><code class="language-xml">';
    $data .= '&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;';
    $data .= '
&lt;plugins&gt;';
       $number = 1;
       while($row = mysqli_fetch_assoc($result))
       {
        $data .='<div class="div_l" id="list_'.$row["id"].'">';
            if ($row['param']== 't_l') {
                 $data .='
    &lt;plugin&gt;  <button onClick="hapus('.$row['id'].')" class="btn btn-danger btn-sm">x</button>
        &lt;Width&gt;'.$row['val_w'].'&lt;/Width&gt;
        &lt;Height&gt;'.$row['val_h'].'&lt;/Height&gt;
        &lt;Left&gt;'.$row['val_x'].'&lt;/Left&gt;
        &lt;Top&gt;'.$row['val_y'].'&lt;/Top&gt;
    &lt;/plugin&gt';   
            }else{
                $data .='
    &lt;plugin&gt;  <button onClick="hapus('.$row['id'].')" class="btn btn-danger btn-sm">x</button>
        &lt;name&gt;'.$row['name'].'&lt;/name&gt;
        &lt;Type&gt;'.$row['type'].'&lt;/Type&gt;
        &lt;Description&gt;'.$row['description'].'&lt;/Description&gt;
        &lt;X&gt;'.$row['val_x'].'&lt;/X&gt;
        &lt;Y&gt;'.$row['val_y'].'&lt;/Y&gt;
        &lt;Width&gt;'.$row['val_w'].'&lt;/Width&gt;
        &lt;Height&gt;'.$row['val_h'].'&lt;/Height&gt;
        &lt;Action&gt;'.$row['action'].'&lt;/Action&gt;
        &lt;datas&gt;'.$row['datas'].'&lt;/datas&gt;
    &lt;/plugin&gt'; 
            }
        $data .="</div>";
        }
 $data .= '
&lt;/plugins&gt';
$data .= '</code></pre>';
echo $data;
}


?>

 <!-- &lt;name&gt;'.$row['name'].'&lt;/name&gt;
        &lt;Type&gt;'.$row['type'].'&lt;/Type&gt;
        &lt;Description&gt;'.$row['description'].'&lt;/Description&gt; -->

        <!-- &lt;Action&gt;'.$row['action'].'&lt;/Action&gt;
        &lt;datas&gt;'.$row['datas'].'&lt;/datas&gt;

 -->

