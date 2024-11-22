@import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "poppins", sans-serif;
  text-decoration: none;
  list-style-type: none;
  outline: none;
}

body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  min-height: calc(100vh - 260px);
}

body > section {
  min-height: calc(100vh - 260px);
}

h1 {
  color: #333;
}

.page-in-information-state {
  margin: 0 auto;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  gap: 20px;
}
.navbar-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-direction: row;
  height: 60px;
  background-color: #fff;
  padding: 0 30px;
}

.navbar {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: row;

  ul {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    gap: 20px;
  }

  a {
    color: black;
  }
}

.navbar-container a {
  text-decoration: none;
}
.footer-section {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 50px;
  padding: 30px 50px;
  height: 200px;
  background-color: #333;
  color: #fff;

  a {
    color: #eee;
  }
}

.page-links,
.social-media {
  h3 {
    text-align: center;
    margin: 10px auto 20px;
  }

  ul {
    display: grid;
    justify-items: flex-start;
    align-content: flex-start;
  }
}

.page-links {
  position: relative;
  ul {
    grid-template-columns: repeat(1, 1fr);
  }
}

.page-links::before,
.page-links::after {
  content: "";
  position: absolute;
  background-color: white;
}
.page-links::before {
  top: 0;
  right: -23px;
  height: 100%;
  width: 3px;
}
.page-links::after {
  transform: translateY(-50%);
  top: 50%;
  right: -31px;
  height: 3px;
  width: 20px;
}

.social-media {
  ul {
    grid-template-columns: repeat(2, 1fr);
    justify-items: center;
  }
}
.posts-title {
  text-align: center;
  font-size: 24px;
  margin: 80px 0 -30px;
}

.posts-container {
  display: block;
  padding: 30px 20px;
  margin: 50px 100px;
  border-radius: 15px;
  background-color: #eee;

  ul {
    display: flex;
    justify-content: center;
    align-items: center;
    row-gap: 20px;
    column-gap: 30px;

    li {
      min-width: 300px;
    }
  }
}

.listed-post {
  display: inline-block;
  text-align: left;
  min-height: 100px;
  max-height: fit-content;
  border-radius: 10px;
  padding: 20px 20px 40px;
  min-width: 300px;
  width: 100%;
  background-color: #fff;

  .title {
    font-size: 20px;
  }

  .author {
    color: #222;
    font-size: 12px;
  }

  .created-date {
    font-size: 10px;
  }
}
.form {
  margin: 40px auto;
  padding: 20px 40px;
  border-radius: 25px;
  max-height: max-content;
  max-width: max-content;
  min-height: 300px;
  min-width: 500px;
  background-color: #eee;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  gap: 15px;

  h1 {
    margin: 20px 0 10px;
  }

  input {
    display: inline-block;
    width: 100%;
    min-height: 3em;
    padding: 10px 20px;
    border-radius: 10px;
    background-color: #fff;
    border: none;
  }

  input#title {
    font-weight: 500;
  }

  textarea {
    background-color: #fff;
    border-radius: 15px;
    border: none;
    resize: none;
    padding: 10px 20px;
    font-size: 12px;
    line-height: 18px;
    width: 100%;
  }

  button {
    background-color: greenyellow;
    height: 4em;
    width: max-content;
    margin: 5px 0 5px auto;
    border: none;
    padding: 10px 50px;
    font-weight: 600;
    display: block;
    letter-spacing: 1px;
    border-radius: 10px;
    transition: 300ms;
    animation: buttonAnimation infinite 2.5s ease-in-out;
  }
  button:hover {
    padding: 10px 80px;
  }

  p {
    margin: 20px 0 0;
    font-size: 12px;
  }

  .form-helper-buttons {
    margin: -10px 0 20px;
    width: 100%;
    text-align: left;
  }
}

@keyframes buttonAnimation {
  35% {
    transform: translateX(0px);
  }
  40% {
    transform: translateX(5px);
  }
  45% {
    transform: translateX(-5px);
  }
  50% {
    transform: translateX(5px);
  }
  55% {
    transform: translateX(-5px);
  }
  60% {
    transform: translateX(5px);
  }
  65% {
    transform: translateX(0px);
  }
}
.about-page {
  background-color: #555;
  padding: 50px;
  margin: 50px 200px;

  h1 {
    color: #eee;
  }

  .info {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    padding: 0 0 30px;
    justify-items: center;
    align-content: center;
    width: 100%;
    height: 100%;
    margin: 30px 0;
    gap: 50px;
  }

  p {
    margin: 50px 0 0;
    text-wrap: wrap;
    max-width: 500px;
    line-height: 2em;
  }

  img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    margin-top: 50px;
    border: 2px solid white;
  }

  .accent {
    color: greenyellow;
    font-weight: bold;
  }
}
.logout-page {
  margin: 0 auto;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  gap: 50px;
}
.profile-page {
  margin: 0 auto;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  gap: 20px;
}
