class User {
    constructor(name) {
        this.name = name;
    }

    getName() {
        return this.name;
    }

    setName(name) {
        this.name = name;
    }
}

var user = new User("hello");
user.setName("Cool!");
console.log(user.getName());

