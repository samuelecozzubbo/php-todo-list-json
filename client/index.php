<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>toDoList</title>
    <script src="https://unpkg.com/vue@3"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.2/axios.min.js" integrity="sha512-JSCFHhKDilTRRXe9ak/FJ28dcpOJxzQaCd3Xg8MyF6XFjODhy/YMCM8HW0TFDckNHWUewW+kfvhin43hKtJxAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div id="app">
        <div class="wrapper">
            <h1>{{title}}</h1>
            <div class="app-list">
                <ul>
                    <li v-for="(task,index) in list" :key="index">{{task.text}} <a>X</a></li>
                </ul>
                <hr>
                <input type="text" placeholder="Inserisci una nuova task">
                <button type="submit">Aggiungi</button>
            </div>
        </div>
    </div>
    <script src="script/script.js"></script>
</body>

</html>