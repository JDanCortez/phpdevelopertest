<?php echo $this->extend('layout'); ?>

<?php echo $this->section('content') ?>
        <div class="row">
            <?php if(!isset($show)) { ?>
            <h1>
                <?php echo $formTitle ?>
            </h1>
            <form action="<?php echo $path ?>" method="post" id="postForm" class="my-4">
                <input type="hidden" name="_method" value="<?php echo $method ?>">
                <label id='lblTitle' for="title">Title</label>
                <input type="text" class="form-control" required='true' name="title" id="title" value="<?php 
                    if(isset($_SESSION['_ci_old_input'] )) echo $_SESSION['_ci_old_input']['post']['title'];
                    else if(isset($post)) echo $post['title'] ?>">
                <label id='lblPost' for="post">Post</label>
                <textarea name="post" required='true' id="post" class="form-control" rows="12"><?php 
                    if(isset($_SESSION['_ci_old_input'] )) echo $_SESSION['_ci_old_input']['post']['post'];               
                    else if(isset($post)) echo $post['post'] ?></textarea>
                <div class="d-flex justify-content-between">
                    <a href="/" class="mt-2 btn btn-secondary">Go Home</a>
                    <button type="submit" class="mt-2 btn btn-primary" id='btnFormm'>Save</button>
                </div>
            </form>
            <?php } else { ?>
                <h1>
                    <?php echo $post['title'] ?>
                </h1>
                <p>
                <?php echo $post['post'] ?>
                </p>
                <div class="d-flex justify-content-between">
                    <a href="/" class="mt-2 btn btn-secondary">Go Home</a>
                </div>
            <?php } ?>
        </div>
    </div>

    <script>

        let isFieldEmpty = (fieldId) => {
            let field = document.getElementById(fieldId);
            let fieldValue = field.value.replace(/\s/g, "");

            if (fieldValue == ''){
                field.classList.add("is-invalid");
                return true;
            }

            field.classList.remove("is-invalid");
            field.classList.add("is-valid");
            return false;

        }
        
        let validateForm = (event) => {
            
            let title = isFieldEmpty('title');
            let post = isFieldEmpty('post');

            if(title || post){
                event.preventDefault();
            }

        };

        document.getElementById('postForm').addEventListener('submit', validateForm, true);
        document.getElementById('title').addEventListener('input', () => { isFieldEmpty('title') } );
        document.getElementById('post').addEventListener('input', () => { isFieldEmpty('post') } );

        let formErrorAlert = document.getElementById('formErrorAlert');
        if(formErrorAlert){
            isFieldEmpty('title');
            isFieldEmpty('post');
        }
    </script>

<?php echo $this->endSection('content'); ?>
