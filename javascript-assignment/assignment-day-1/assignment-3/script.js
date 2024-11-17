function functionScopeExample() {
  if (true) {
    var functionScopedVar = "I am function scoped!";
  }
  console.log(functionScopedVar); // This will log: "I am function scoped!"
}

function blockScopeExample() {
  if (true) {
    let blockScoped = "I am block scoped!";
    console.log(blockScoped);
  }
  // console.log(blockScopedVar); // Uncommenting this line will cause an error: ReferenceError
}

functionScopeExample();
blockScopeExample();
