<div ng-controller="MessageController" ng-init="find()">
    <p ng-if="!todos.length">
        There are no todos right now, <a href="/todos/create">create one!</a>
    </p>

    <div class="row" ng-repeat="todo in todos">
        <div class="col-lg-6">
            {{todo.body}}
        </div>
    </div>
</div>

