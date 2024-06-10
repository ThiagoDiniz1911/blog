<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])){

        $postId = $_GET['id'];

        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }

    }
?>

    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'];?></h1>
            <p id="post-description"><?= $currentPost['description'];?></p>
            <div class="img-container">
                <img src="img/<?= $currentPost['img'];?>" alt="<?= $currentPost['title'];?>">
            </div>
            <p class="post-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut necessitatibus quae rerum corporis temporibus, dolores perspiciatis quod nobis hic assumenda nesciunt modi eveniet optio quos et dolorum non architecto distinctio?
            Eos mollitia odit asperiores perspiciatis voluptatum eius, laudantium vel ea non fugit! Dolores voluptate in natus, ipsum id ratione? Distinctio sunt maiores eos dolorem esse! Similique, perferendis. Similique, quidem voluptatum!
            Architecto, aut corporis tempore, aperiam possimus nesciunt et a soluta optio iure beatae tenetur iusto explicabo incidunt consequatur facere dicta dolores magni unde illum numquam nulla. Odio quis aliquid at?
            Nihil, praesentium! Non sint, perferendis iure ipsa tempore fuga soluta magni doloribus sunt blanditiis magnam sapiente quasi atque, debitis quos veniam ipsum dicta expedita? Officiis laboriosam exercitationem sit obcaecati molestias.
            Tenetur commodi, unde officiis, enim hic molestiae laboriosam dolore, autem ipsum soluta sunt debitis placeat mollitia officia! Adipisci esse sequi et laboriosam neque ut, quaerat ex voluptatum autem eaque maxime!
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut necessitatibus quae rerum corporis temporibus, dolores perspiciatis quod nobis hic assumenda nesciunt modi eveniet optio quos et dolorum non architecto distinctio?
            Eos mollitia odit asperiores perspiciatis voluptatum eius, laudantium vel ea non fugit! Dolores voluptate in natus, ipsum id ratione? Distinctio sunt maiores eos dolorem esse! Similique, perferendis. Similique, quidem voluptatum!
            Architecto, aut corporis tempore, aperiam possimus nesciunt et a soluta optio iure beatae tenetur iusto explicabo incidunt consequatur facere dicta dolores magni unde illum numquam nulla. Odio quis aliquid at?
            Nihil, praesentium! Non sint, perferendis iure ipsa tempore fuga soluta magni doloribus sunt blanditiis magnam sapiente quasi atque, debitis quos veniam ipsum dicta expedita? Officiis laboriosam exercitationem sit obcaecati molestias.
            Tenetur commodi, unde officiis, enim hic molestiae laboriosam dolore, autem ipsum soluta sunt debitis placeat mollitia officia! Adipisci esse sequi et laboriosam neque ut, quaerat ex voluptatum autem eaque maxime!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut necessitatibus quae rerum corporis temporibus, dolores perspiciatis quod nobis hic assumenda nesciunt modi eveniet optio quos et dolorum non architecto distinctio?
            Eos mollitia odit asperiores perspiciatis voluptatum eius, laudantium vel ea non fugit! Dolores voluptate in natus, ipsum id ratione? Distinctio sunt maiores eos dolorem esse! Similique, perferendis. Similique, quidem voluptatum!
            Architecto, aut corporis tempore, aperiam possimus nesciunt et a soluta optio iure beatae tenetur iusto explicabo incidunt consequatur facere dicta dolores magni unde illum numquam nulla. Odio quis aliquid at?
            Nihil, praesentium! Non sint, perferendis iure ipsa tempore fuga soluta magni doloribus sunt blanditiis magnam sapiente quasi atque, debitis quos veniam ipsum dicta expedita? Officiis laboriosam exercitationem sit obcaecati molestias.
            Tenetur commodi, unde officiis, enim hic molestiae laboriosam dolore, autem ipsum soluta sunt debitis placeat mollitia officia! Adipisci esse sequi et laboriosam neque ut, quaerat ex voluptatum autem eaque maxime!</p>
            <p class="post-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut necessitatibus quae rerum corporis temporibus, dolores perspiciatis quod nobis hic assumenda nesciunt modi eveniet optio quos et dolorum non architecto distinctio?
            Eos mollitia odit asperiores perspiciatis voluptatum eius, laudantium vel ea non fugit! Dolores voluptate in natus, ipsum id ratione? Distinctio sunt maiores eos dolorem esse! Similique, perferendis. Similique, quidem voluptatum!
            Architecto, aut corporis tempore, aperiam possimus nesciunt et a soluta optio iure beatae tenetur iusto explicabo incidunt consequatur facere dicta dolores magni unde illum numquam nulla. Odio quis aliquid at?
            Nihil, praesentium! Non sint, perferendis iure ipsa tempore fuga soluta magni doloribus sunt blanditiis magnam sapiente quasi atque, debitis quos veniam ipsum dicta expedita? Officiis laboriosam exercitationem sit obcaecati molestias.
            Tenetur commodi, unde officiis, enim hic molestiae laboriosam dolore, autem ipsum soluta sunt debitis placeat mollitia officia! Adipisci esse sequi et laboriosam neque ut, quaerat ex voluptatum autem eaque maxime!
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut necessitatibus quae rerum corporis temporibus, dolores perspiciatis quod nobis hic assumenda nesciunt modi eveniet optio quos et dolorum non architecto distinctio?
            Eos mollitia odit asperiores perspiciatis voluptatum eius, laudantium vel ea non fugit! Dolores voluptate in natus, ipsum id ratione? Distinctio sunt maiores eos dolorem esse! Similique, perferendis. Similique, quidem voluptatum!
            Architecto, aut corporis tempore, aperiam possimus nesciunt et a soluta optio iure beatae tenetur iusto explicabo incidunt consequatur facere dicta dolores magni unde illum numquam nulla. Odio quis aliquid at?
            Nihil, praesentium! Non sint, perferendis iure ipsa tempore fuga soluta magni doloribus sunt blanditiis magnam sapiente quasi atque, debitis quos veniam ipsum dicta expedita? Officiis laboriosam exercitationem sit obcaecati molestias.
            Tenetur commodi, unde officiis, enim hic molestiae laboriosam dolore, autem ipsum soluta sunt debitis placeat mollitia officia! Adipisci esse sequi et laboriosam neque ut, quaerat ex voluptatum autem eaque maxime!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut necessitatibus quae rerum corporis temporibus, dolores perspiciatis quod nobis hic assumenda nesciunt modi eveniet optio quos et dolorum non architecto distinctio?
            Eos mollitia odit asperiores perspiciatis voluptatum eius, laudantium vel ea non fugit! Dolores voluptate in natus, ipsum id ratione? Distinctio sunt maiores eos dolorem esse! Similique, perferendis. Similique, quidem voluptatum!
            Architecto, aut corporis tempore, aperiam possimus nesciunt et a soluta optio iure beatae tenetur iusto explicabo incidunt consequatur facere dicta dolores magni unde illum numquam nulla. Odio quis aliquid at?
            Nihil, praesentium! Non sint, perferendis iure ipsa tempore fuga soluta magni doloribus sunt blanditiis magnam sapiente quasi atque, debitis quos veniam ipsum dicta expedita? Officiis laboriosam exercitationem sit obcaecati molestias.
            Tenetur commodi, unde officiis, enim hic molestiae laboriosam dolore, autem ipsum soluta sunt debitis placeat mollitia officia! Adipisci esse sequi et laboriosam neque ut, quaerat ex voluptatum autem eaque maxime!</p>
        </div>

        <aside id="nav-container">
       <h3 id="tags-title">Tags</h3>
       <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag):?>
            <li><a href="#"><?=$tag?></a></li>
            <?php endforeach;?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category):?>
            <li><a href="#"><?=$category?></a></li>
            <?php endforeach;?>
        </ul>
    </aside>
    </main>



    
    <?php
    include_once("templates/footer.php");
?>