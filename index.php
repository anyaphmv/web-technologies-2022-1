<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Папки</title>
    <link href="style.css" rel="stylesheet">
    <script src="index.js" type="module" r></script>
</head>
<body>
<?php
function getTree(){
    $conn=mysqli_connect("test2.com", "root", "", "lesson10");
    $query = "SELECT * from menu";
    $result= mysqli_query($conn, $query);
    $tree = [];
    foreach ($result as $row){
        $tree[$row['id']]['parent']=$row['parent_id'];
        $tree[$row['id']]['title']=$row['title'];
        $tree[$row['id']]['childrens']=[];
        if(is_null($row['parent_id'])) continue;
        $tree[$row['parent_id']]['childrens'][$row['id']]=$row['id'];
    }
    mysqli_close($conn);
    return $tree;
}
$tree=getTree();
echo ('<div class="list-items" id="list-items">');
foreach ($tree as $root){
    if($root['parent']==""){
        render_menu($tree,$root);
    }
}
echo ('</div>');

function render_menu($tree, $root){
    if(count($root['childrens'])!=0){
        $div_head ="<div class=\"list-item \" data-parent>\n".
            "<div class=\"list-item__inner\">\n".
            "<img class=\"list-item__arrow\" src=\"./assets/img/chevron-down.png\" alt=\"chevron-down\" data-open>\n".
            "<img class=\"list-item__folder\" src=\"./assets/img/folder.png\" alt=\"folder\">\n".
            "<span>".$root['title']."</span>\n".
            "</div>\n".
            "<div class=\"list-item__items\">";
        echo($div_head);
        foreach ($root['childrens'] as $children){
            render_menu($tree,$tree[$children]);
        }
        echo('</div> </div>');
    }
    else{
        echo("<div class=\"list-item__inner\">\n".
            "<img class=\"list-item__folder\" src=\"./assets/img/folder.png\" alt=\"folder\">\n".
            "<span>".$root['title']."</span>\n".
            "</div>");
    }

}
?>

</body>
</html>