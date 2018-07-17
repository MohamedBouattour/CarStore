<style type="text/css">
        h4{
        font-weight: 600;
    }
    p{
        font-size: 14px;
        
    }

    .button{
        margin-left: 4cm
    }

    .price{
        font-size: 30px;
        color: #333;
    }
    .right{
        float:right;
        border-bottom: 2px solid #4B8E4B;
    }
    .thumbnail{
        opacity:0.70;
        -webkit-transition: all 0.5s; 
        transition: all 0.5s;
    }
    .thumbnail:hover{
        opacity:1.00;
        box-shadow: 0px 0px 10px #4bc6ff;
    }
    .line{
        margin-bottom: 10px;
    }
    @media screen and (max-width: 770px) {
        .right{
            float:left;
            width: 100%;
        }
    }
</style>
<div class="container" style="margin-top: 5cm">
    <div class="row">
    <?php foreach ($voitures as $voiture) { ?>
        <!-- BEGIN PRODUCTS -->
        <div class="col-md-3 col-sm-6">
            <span class="thumbnail">
                <img src="<?php echo base_url()."upload/".$voiture->images_v; ?>" alt="...">
                <h4><?php echo $voiture->marque_v." ".$voiture->model_v.": <br>".$voiture->prix_v." DT"; ?></h4>
                <div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
                <p>
                <?php if($voiture->klm==0) echo "neuf ";
                else 
                {
                    echo $voiture->klm." klm ";
                    echo date("Y")-$voiture->anne_construction." ans ";
                }
                echo $voiture->description;
                ?>
                </p>
                <hr class="line">
                <div class="row"> 
                    <div >
                        <button class="btn-success" > AJOUTER AU PANIER</button>
                        <button class="btn-success" > DEMANDER UN RENDEZ-VOUS</button>
                    </div>
                    
                </div>
            </span>
        </div>
        
        
        <!-- END PRODUCTS -->
        <?php } ?>
    </div>
</div>