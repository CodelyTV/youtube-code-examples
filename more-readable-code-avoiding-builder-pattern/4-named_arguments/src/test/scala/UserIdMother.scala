import java.util.UUID

object UserIdMother {
  def apply(value: String): UserId = UserIdMother(UuidMother(value))

  def apply(value: UUID): UserId = UserId(value)

  def random: UserId = UserId(UuidMother.random)
}
