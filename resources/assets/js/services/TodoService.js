angular.module('TodoService', []).factory('Todo', ['$resource',
  function ($resource) {
    return $resource('/api/message/:todoId', {
      todoId: '@id'
    }, {
      update: {
        method: 'PUT'
      }
    });
  }
]);