<div class="row">
	<div class="col-lg-12">
    <?php 
        
        // інформаційні елементи, які утворюють сайт як рекламний носій:
        $website = array(
            // поверх: (этаж)
            'header' => array(),
            'body' => array(),
            'footer' => array(
                'contacts' => array(
                    'email','phone','address','skype','vk','facebook','instagram'
                )
            ),
            // спільне для всіх:
            'common' => array(
                'link',
                'h1','h2','h3','h4',
                'table',
                ''
            )
        );
        
        echo '<pre>';
        print_r(configuration::STYLE);
        
        
        // які властивості елементів?
        // яке призначення елементів?
        // які ф-ї елементів, що вони вміють і чого не вміють?
        // в чому смисл елементів?
        // як генерувати, обробляти, зберігати елементи сайту?
        
    /*
        Копіювання блоку і його вмісту:
        
        1) Вказую блок для копіювання
        2) Вказую блок у який вставити
        3) Збираю дерево блоку
        4) Вставляю в базу даних з новими ІД (класи з старого дерева)
  
    */
    

    
    ?>
    </div>
</div>



