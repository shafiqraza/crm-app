<template>
  <div id="left">
    <img
      :src="require('../images/hamburger.png').default"
      alt="menu icon"
      class="menu_img"
    />
    <div class="wrapper">
      <div class="profile">
        <h1 class="profile__title">Hi Shafee</h1>
        <h2 class="profile__subtitle">Let's make project more amazing!</h2>
      </div>
      <div class="search">
        <input
          type="text"
          placeholder="Search your project or tasks..."
          class="search__input"
        />
        <img
          :src="require('../images/search.png').default"
          alt="serch icon"
          class="search__icon"
        />
      </div>
      <div class="projects">
        <div class="projects__header">
          <h3 class="projects__title">Projects</h3>
          <p class="projects__count">(6)</p>
        </div>
        <div class="projects__body">
          <div class="project">
            <div class="selected">
              <div
                class="project__box"
                :style="{
                  background: `url(${require('../images/overlay.png').default}),
                    linear-gradient(
                    to left bottom,
                    rgba(24, 106, 237),
                    rgba(66, 139, 255)
                )`,
                }"
              >
                PT
              </div>
            </div>

            <h3 class="project__title">Development</h3>
          </div>
          <div class="project">
            <div
              class="project__box"
              :style="{
                background: `url(${
                  require('../images/overlay.png').default
                }), linear-gradient(
                    to left bottom,
                    rgba(255, 23, 78),
                    rgba(255, 89, 129)
                )`,
              }"
            >
              RA
            </div>
            <h3 class="project__title">Design</h3>
          </div>
          <div class="project">
            <div
              class="project__box"
              :style="{
                background: `url(${
                  require('../images/overlay.png').default
                }), linear-gradient(
                    to left bottom,
                    rgba(196, 125, 4),
                    rgba(255, 161, 0)
                )`,
              }"
            >
              TA
            </div>
            <h3 class="project__title">Testing</h3>
          </div>
          <div class="project">
            <div
              class="project__box"
              :style="{
                background: `url(${
                  require('../images/overlay.png').default
                }), linear-gradient(
                    to left bottom,
                    rgba(4, 209, 52),
                    rgba(39, 227, 83)
                )`,
              }"
            >
              MD
            </div>
            <h3 class="project__title">Medium Draft</h3>
          </div>
          <div class="project">
            <div
              class="project__box"
              :style="{
                background: `url(${
                  require('../images/overlay.png').default
                }), linear-gradient(
                    to left bottom,
                    rgba(152, 39, 227),
                    rgba(175, 62, 250)
                )`,
              }"
            >
              LP
            </div>
            <h3 class="project__title">Landing Page</h3>
          </div>
          <div class="project">
            <div
              class="project__box"
              :style="{
                background: `url(${
                  require('../images/overlay.png').default
                }), linear-gradient(
                    to left bottom,
                    rgba(0, 6, 122),
                    rgba(41, 46, 150)
                )`,
              }"
            >
              +
            </div>
            <h3 class="project__title">Add Project</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
#left {
  color: #ddd;
  width: 25%;
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;

  //   min-height: 100vh;
  padding: 50px 0;
}

.menu_img {
  width: 35px;
  position: absolute;
  top: 20px;
  left: 20px;
}

.wrapper {
  & .profile {
    margin: 30px 0;

    &__title {
      font-size: 24px;
    }

    &__subtitle {
      color: #919191;
      opacity: 0.5;
      font-size: 16px;
    }
  }

  & .search {
    position: relative;
    margin-bottom: 70px;
    &__input {
      background-color: rgba(255, 255, 255, 0.1);
      border: none;
      outline: none;
      padding: 12px 15px 12px 35px;
      display: block;
      width: 100%;
      border-radius: 10px;
      color: #919191;
      transition: 0.2s all;
      &:focus {
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
      }
    }

    &__icon {
      position: absolute;
      top: 50%;
      left: 12px;
      transform: translateY(-50%);
      width: 15px;
    }
  }
}

.projects {
  .projects__header {
    margin-bottom: 30px;
    display: flex;
    align-items: center;
  }
  &__title {
    font-size: 16px;
  }
  &__count {
    color: #919191;
    margin-left: 5px;
    font-size: 13px;
  }

  .projects__body {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 30px;
  }

  .project {
    .outline {
      border: 2px solid rgba(24, 106, 237);
      border-radius: 10px;
      padding: 2px;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    &__box {
      width: 70px;
      height: 70px;
      border-radius: 10px;
      box-shadow: 0 5px 5px rgba(0, 0, 0, 0.3);
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 16px;
      cursor: pointer;
      //   padding: 50px;
      //   outline: 2px solid red;
      //   outline-offset: 5px;

      //   padding: 5px;
    }
    &__title {
      font-size: 10px;
      text-align: center;
      margin-top: 10px;
      cursor: pointer;

      &:hover {
        text-decoration: underline;
      }
    }
  }
}
</style>
