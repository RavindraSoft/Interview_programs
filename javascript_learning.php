<script type="text/javascript">

    var str = "nitesh hiraman pawar";
    
    console.log(str);

    var newStr =  str.split(" ").map(function(word){
        return word.split("").reverse().join("");
    });

    console.log(newStr.join(" "));

</script>