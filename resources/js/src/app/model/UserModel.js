export default class {
  constructor(input) {
    this.updateValues(input);
  }

  updateValues(input) {
    if (input) {
      this.id = input.id;
      this.email = input.email;
      this.username = input.username;
    }
  }

  clearValues() {
    this.id = null;
    this.email = null;
    this.username = null;
  }

  getId() {
    return this.id;
  }

  getEmail() {
    return this.email;
  }

  getUserName() {
    return this.username;
  }

  isAuthenticated() {
    if (this.id !== null) {
      return true;
    }
    return false;
  }
}
