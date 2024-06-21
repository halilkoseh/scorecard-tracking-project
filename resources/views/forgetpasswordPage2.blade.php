<!-- <div class="logo-flex">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      fill="none"
      viewBox="0 0 24 24"
      stroke-width="1.5"
      stroke="currentColor"
      class="user-icon"
    >
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z"
      />
    </svg>

    <input
      class="input"
      type="password"
      name="password"
      placeholder="Yeni Şifreniz"
    />
  </div>
  <div class="logo-flex">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      fill="none"
      viewBox="0 0 24 24"
      stroke-width="1.5"
      stroke="currentColor"
      class="user-icon"
    >
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z"
      />
    </svg>

    <input
      class="input"
      type="password"
      name="password"
      placeholder="Yeni Şifreniz (Yeniden)"
    />
  </div>
</div> -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="forgotpass.css" />
    <title>SKS Şifremi Unuttum</title>
  </head>

<style>
    /*
SPACING SYSTEM (px)
2 / 4 / 8 / 12 / 16 / 24 / 32 / 48 / 64 / 80 / 96 / 128

FONT SIZE SYSTEM (px)
/* 10 / 12 / 14 / 16 / 18 / 20 / 24 / 30 / 36 / 44 / 52 / 62 / 74 / 86 / 98 */
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
html {
  font-family: "Inter", sans-serif;
  color: #343a40;
  line-height: 1;
}
body {
  margin: 0 auto;
  height: 100vh;
  position: relative;
}
.image {
  height: 100%;

  position: relative;
  background-position: center;
  background-image: linear-gradient(
      rgba(34, 34, 34, 0.4),
      rgba(34, 34, 34, 0.4)
    ),
    url(images/izü_okul.jpg);
  background-size: cover;
}
.signup-container {
  height: 400px;
  width: 350px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  border-radius: 5%;
  box-shadow: 0 12px 24px rgba(0, 0, 0, 0.5);
  background-color: rgba(241, 243, 245, 0.85);
}
.flex-container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 12px;
}
.signup-img {
  margin-top: 32px;

  width: 225px;
  height: 150px;
  display: block;
}
.input {
  padding: 4px;
  border: none;
  outline: none;
  width: 190px;
}
.input :focus {
  border: none;
  outline: none;
}
.user-icon {
  height: 24px;
  width: 24px;
  background-color: transparent;
}
.logo-flex {
  display: flex;
  gap: 10px;
  border: 1px solid black;
  background-color: white;
  padding: 5px 10px;
  border-radius: 4px;
}
.button {
  position: absolute;
  top: 85%;
  left: 50%;
  transform: translate(-50%, -50%);

  background-color: #228be6;
  color: #f1f3f5;
  padding: 6px 12px;

  border: 1px solid #1c7ed6;
  border-radius: 6px;
  cursor: pointer;
  font-weight: 500;
}
.button:hover {
  background-color: #1971c2;
}

.button:active,
.button:visited {
  background-color: #228be6;
}
    </style>


  <body>
    <div class="image">
      <div class="signup-container">
        <div class="flex-container">
          <img
            class="signup-img"
            src="images/logo-removebg-preview.png"
            alt="logo"
          />

          <div class="logo-flex">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="user-icon"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z"
              />
            </svg>

            <input
              class="input"
              type="password"
              name="password"
              placeholder="Yeni Şifreniz"
            />
          </div>
          <div class="logo-flex">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="user-icon"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z"
              />
            </svg>

            <input
              class="input"
              type="password"
              name="password"
              placeholder="Yeni Şifreniz (Yeniden)"
            />
          </div>
        </div>
        <button class="button">Şifreyi Yenile</button>
      </div>
    </div>
  </body>
</html>
