<?php

/* ApplicationSonataSuperMarketBundle::edit.html.twig */
class __TwigTemplate_b369f7365839c93a32000c7ac2aed2b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig");

        $this->blocks = array(
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_form($context, array $blocks = array())
    {
        // line 5
        echo "    
    ";
        // line 6
        $this->displayParentBlock("form", $context, $blocks);
        echo "

<script>
    
    function clickme(id)
    {
       \$(\".price\").html(\"\");
      
       var idstring = id.split(\"_\"); 
       
      idstring[3] = \"price\";
       
       var priceid = idstring[0]+\"_\"+idstring[1]+\"_\"+idstring[2]+\"_\"+idstring[3];
       
       var idvalue = \$('#'+id).val();
        \$.ajax({
                url : \"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("application_sonata_supermarket_price");
        echo "\",
                type: \"POST\",
                data :{
                    'productid' : idvalue
                },
                success: function(data)
                {
                    \$(\"#\"+priceid).attr(\"value\",data);  
                },
                error: function()
                {
                       alert(\"not ok\");
                }
                });
    }
    
    
</script>
<script>

    function inputValue(id)
    {
       var idstring = id.split(\"_\"); 
       
       idstring[3] = \"total\";
       
       var quantityid = idstring[0]+\"_\"+idstring[1]+\"_\"+idstring[2]+\"_\"+idstring[3];
       
       var idstring2 = id.split(\"_\"); 
       
       idstring2[3] = \"price\";
       
       var priceid = idstring2[0]+\"_\"+idstring2[1]+\"_\"+idstring2[2]+\"_\"+idstring2[3];
       
        
      \$(\".total\").html(\"\");
      var productprice = \$(\"#\"+priceid).val();
      var idvalue = document.getElementById(id).value;
      var product = productprice*idvalue;
      \$('#'+quantityid).attr(\"value\",product);
      
    }

    
</script>
 <script src=\"http://code.jquery.com/ui/1.10.3/jquery-ui.js\"></script>
<script>

    \$('.datepicker').datepicker({
\tflat: true,
\tdate: '2008-07-31',
\tcurrent: '2008-07-31',
\tcalendars: 1,
\tstarts: 1,
        dateFormat: 'yy-mm-dd' 
        
});
    
 </script>


";
    }

    public function getTemplateName()
    {
        return "ApplicationSonataSuperMarketBundle::edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 22,  34 => 6,  31 => 5,  28 => 4,);
    }
}
