<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/iransans.css" />
    <link rel="stylesheet" href="css/rubik.css" />
    <link rel="stylesheet" href="css/admin.css" />
    <link rel="stylesheet" href="Fonts/FontAwesome/css/all.css" />
    <link rel="stylesheet" href="css/style.css" />
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>پنل ادمین</title>
</head>
<body>
<section class="dashboard container" id="dashboard-sec">
    <div class="header ">
        <h2>داشبورد</h2>
        <hr />
    </div>
    <div class="cards">
        @foreach($items as $item)
            <article class="card">
                <div class="image">
                    <img src="images/kherad.jpg" alt="kherad" width="113px" />
                </div>
                <div class="content">
                    <div class="first-row">
                        <h2 class="title">{{$item->title}}</h2>
                        @if($item->type === 'author')
                            <h2 class="label">ترجمه</h2>
                        @else
                            <h2 class="label">تالیف</h2>
                        @endif
                    </div>
                    <div class="second-row">
                        <p>{{$item->description}}</p>
                    </div>
                    <div class="price_quantity">
                        <div class="price">
                            <h2>قیمت: </h2>
                            <div class="price_number">
                                <h2>{{$item->price}}</h2>
                                <h2>ءتء</h2>
                            </div>
                        </div>
                        <div class="price">
                            <h2>موجودی: </h2>
                            <h2>{{$item->quantity}}</h2>

                        </div>
                    </div>
                    <div class="btn-actions">
                        <a class="more" href="more.html">
                            <h2>حذف</h2>
                            <i class="fa-solid fa-trash"></i>
                        </a>
                        <a class="more" href="more.html">
                            <h2>ویرایش</h2>
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </div>
                    <a class="more" href="more.html">
                        <h2>مشاهده پست در وبسایت</h2>
                        <i class="fa-regular fa-cart-shopping"></i>
                    </a>
                </div>
            </article>
        @endforeach
    </div>
</section>
<section class="add-post containers hide-sec" id="add-post-sec">
    <div class="header ">
        <h2>افزودن پست</h2>
        <hr />
    </div>
    <form action="{{route('add_new_post')}}" method="POST" name="form_data">
        @csrf
        <div class="success" id="success">
            <h2></h2>
        </div>
        <div class="form-row">
            <div class="form-input">
                <label for="file">ابعاد عکس فلان پیکسل در فلان پیکسل</label>
                <input type="file"  id="file" name="file">
            </div>
            <div class="form-input">
                <label for="subject">موضوع</label>
                <input type="text" name="subject" class="" id="subject" placeholder="موضوع کتاب" />
                <h2 class="error_message" id="subject_error"></h2>
            </div>
            <div class="form-input">
                <label for="title">عنوان</label>
                <input type="text" name="title" class="" id="title" placeholder="عنوان کتاب" />
                <h2 class="error_message" id="title_error"></h2>
            </div>
        </div>
        <label for="type">مقدمه کتاب</label>
        <select name="type" id="type" class="">
            <option disabled selected value>یک مورد</option>
            <option value="author">تالیف</option>
            <option value="translator">ترجمه</option>
        </select>
        <h2 class="error_message" id="type_error"></h2>

        <div class="form-input">
            <label for="description">نوع کتاب</label>
            <textarea name="description" id="description" class="" cols="30" rows="10"></textarea>
            <h2 class="error_message" id="description_error"></h2>

        </div>
        <div class="form-row">
            <div class="form-input">
                <label for="price">مبلغ</label>
                <input type="number" id="price" name="price" class="" placeholder="مبلغ کتاب" />
                <h2 class="error_message" id="price_error"></h2>

            </div>
            <div class="form-input">
                <label for="quantity">موجودی</label>
                <input type="number" id="quantity" name="quantity" class="" placeholder="موجودی کتاب" />
                <h2 class="error_message" id="quantity_error"></h2>

            </div>
        </div>
        <button id="add_new_post">افزودن پست</button>
    </form>
</section>
<section class="admins-sec container hide-sec" id="admin-sec">
    <div class="header">
        <h2>مدیریت ادمین</h2>
        <hr />
    </div>
    <section class="admin-group">
        <div class="add-new-admin">
            <i class="fa-solid fa-user-plus"></i>
            <h2>افزودن ادمین جدید</h2>
        </div>
        <div class="admins">
            <article>
                <div class="top">
                    <div>
                        <h2>1.</h2>
                        <h2>سامان</h2>
                    </div>
                    <div class="btn-actions">
                        <button id="action_button_delete">
                            <div id="third_div"></div>
                            <h2 class="info1" id="info1">حذف</h2>
                            <i class="fa-solid fa-trash"></i>
                        </button>
                        <button id="action_button_promote">
                            <div id="third_div_two"></div>
                            <h2 class="info2" id="info2">ارتقاء</h2>
                            <i class="fa-regular fa-arrow-up"></i>
                        </button>
                    </div>
                </div>

            </article>
            <article>
                <div class="top">
                    <div>
                        <h2>1.</h2>
                        <h2>سامان</h2>
                    </div>
                    <div class="btn-actions">
                        <button id="action_button_delete">
                            <div id="third_div"></div>
                            <h2 class="info1" id="info1">حذف</h2>
                            <i class="fa-solid fa-trash"></i>
                        </button>
                        <button id="action_button_promote">
                            <div id="third_div_two"></div>
                            <h2 class="info2" id="info2">ارتقاء</h2>
                            <i class="fa-regular fa-arrow-up"></i>
                        </button>
                    </div>
                </div>

            </article>
            <article>
                <div class="top">
                    <div>
                        <h2>1.</h2>
                        <h2>سامان</h2>
                    </div>
                    <div class="btn-actions">
                        <button id="action_button_delete">
                            <div id="third_div"></div>
                            <h2 class="info1" id="info1">حذف</h2>
                            <i class="fa-solid fa-trash"></i>
                        </button>
                        <button id="action_button_promote">
                            <div id="third_div_two"></div>
                            <h2 class="info2" id="info2">ارتقاء</h2>
                            <i class="fa-regular fa-arrow-up"></i>
                        </button>
                    </div>
                </div>

            </article>
        </div>
    </section>
</section>
<section class="cart-sec container" id="cart-sec">
</section>
<aside class="sidebar" id="sidebar">
    <div class="aside-item" id="cart">
        <i class="fa-light fa-cart-shopping" ></i>
        <h2>سفارشات</h2>

    </div>
    <div class="aside-item" id="admins">
        <i class="fa-light fa-users" ></i>
        <h2>مدیریت ادمین ها</h2>

    </div>
    <div class="aside-item" id="add">
        <i class="fa-light fa-plus" ></i>
        <h2>افزودن پست</h2>

    </div>
    <div class="aside-item" id="dashboard">
        <i class="fa-light fa-gauge" ></i>
        <h2>داشبورد</h2>

    </div>
</aside>
<script src="js/admin.js"></script>
<script>
    const add_new_post = document.getElementById('add_new_post');
    const form_input_title = document.getElementById('title');
    const form_input_title_error = document.getElementById('title_error');
    const form_input_subject = document.getElementById('subject');
    const form_input_subject_error = document.getElementById('subject_error');
    const form_input_type = document.getElementById('type');
    const form_input_type_error = document.getElementById('type_error');
    const form_input_description = document.getElementById('description');
    const form_input_description_error = document.getElementById('description_error');
    const form_input_price = document.getElementById('price');
    const form_input_price_error = document.getElementById('price_error');
    const form_input_quantity = document.getElementById('quantity');
    const form_input_quantity_error = document.getElementById('quantity_error');
    const hidden_input = document.form_data.elements['_token'];
    const add_new_post_successful = document.getElementById('success');
    add_new_post.addEventListener('click' , function(event) {
        event.preventDefault();
        console.log(form_input_description.value)
        fetch('{{route('add_new_post')}}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.head.querySelector('meta[name=csrf-token]').content,
            },
            body: JSON.stringify({
                '_token': hidden_input.value,
                'title': form_input_title.value,
                'subject': form_input_subject.value,
                'description': form_input_description.value,
                'type': form_input_type.value,
                'price': form_input_price.value,
                'quantity': form_input_quantity.value,
            })
        }).then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
            .then(data => {
                console.log(data);
                    if(data.errors){
                        if(data.errors['title']){
                            form_input_title.classList.add('error');
                            form_input_title_error.style.display = 'block';
                            form_input_title_error.innerText = data.errors['title'];
                        }
                        if(data.errors['subject']){
                            form_input_subject.classList.add('error');
                            form_input_subject_error.style.display = 'block';
                            form_input_subject_error.innerText = data.errors['subject'];
                        }
                        if(data.errors['description']){
                            form_input_description.classList.add('error');
                            form_input_description_error.style.display = 'block';
                            form_input_description_error.innerText = data.errors['description'];
                        }
                        if(data.errors['type']){
                            form_input_type.classList.add('error');
                            form_input_type_error.style.display = 'block';
                            form_input_type_error.innerText = data.errors['type'];
                        }
                        if(data.errors['price']){
                            form_input_price.classList.add('error');
                            form_input_price_error.style.display = 'block';
                            form_input_price_error.innerText = data.errors['price'];
                        }
                        if(data.errors['quantity']){
                            form_input_quantity.classList.add('error');
                            form_input_quantity_error.style.display = 'block';
                            form_input_quantity_error.innerText = data.errors['quantity'];
                        }

                    }
                if(data.success){
                    add_new_post_successful.style.display = 'flex';
                    add_new_post_successful.innerText = data.success;
                }
            })
        form_input_title.addEventListener('input' , function (event){
            event.target.classList.remove('error');
            form_input_title_error.style.display = 'none';
            add_new_post_successful.style.display = 'none';
        })
        form_input_subject.addEventListener('input' , function (event){
            event.target.classList.remove('error');
            form_input_subject_error.style.display = 'none';
            add_new_post_successful.style.display = 'none';

        })
        form_input_type.addEventListener('input' , function (event){
            event.target.classList.remove('error');
            form_input_type_error.style.display = 'none';
            add_new_post_successful.style.display = 'none';

        })
        form_input_description.addEventListener('input' , function (event){
            event.target.classList.remove('error');
            form_input_description_error.style.display = 'none';
            add_new_post_successful.style.display = 'none';

        })
        form_input_price.addEventListener('input' , function (event){
            event.target.classList.remove('error');
            form_input_price_error.style.display = 'none';
            add_new_post_successful.style.display = 'none';

        })
        form_input_quantity.addEventListener('input' , function (event){
            event.target.classList.remove('error');
            form_input_quantity_error.style.display = 'none';
            add_new_post_successful.style.display = 'none';

        })

    });
</script>
</body>
</html>
