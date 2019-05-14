import java.util.UUID

object UuidMother {
  def apply(value: String): UUID = UUID.fromString(value)

  def random: UUID = UUID.randomUUID()
}
