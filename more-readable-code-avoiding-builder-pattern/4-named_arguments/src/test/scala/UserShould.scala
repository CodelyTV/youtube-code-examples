import org.scalatest.{Matchers, WordSpec}

final class UserShould extends WordSpec with Matchers {
  "test user is able to edit video with enough access level" in {
    val user = UserMother(accessLevel = 3)

    user.canEditVideos shouldBe true
  }

  "test user is not able to edit videos without enough access level" in {
    val user = UserMother(accessLevel = 1)

    user.canEditVideos shouldBe false
  }
}
