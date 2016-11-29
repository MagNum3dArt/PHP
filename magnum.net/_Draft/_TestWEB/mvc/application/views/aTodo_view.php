<?php
/*
 * Created by MagNum on 28.11.2016.
 */
?>
<script src="/js/todo.js"></script>
<link rel="stylesheet" href="/css/todo.css">
<div ng-app>
    <h2>Список дел</h2>
    <div ng-controller="TodoCtrl">
        <span>Осталось {{remaining()}} из {{todos.length}}</span>    [ <a href="" ng-click="archive()"><i class="fa fa-file-archive-o" aria-hidden="true"></i>
            &nbsp; в архив</a> ]
        <div  class="has-success" ng-repeat="todo in todos">
            <div class="checkbox">
                <label>
                    <input  class="btn btn-primary"type="checkbox" ng-model="todo.done">
                    <span class="done-{{todo.done}}">{{todo.text}}</span>
                </label>
            </div>
        </div>



        <form ng-submit="addTodo()" class="navbar-form">
            <div class="form-group">
                <input type="text" class="form-control" ng-model="todoText"  placeholder="впишите новое дело">
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
    </div>
</div>