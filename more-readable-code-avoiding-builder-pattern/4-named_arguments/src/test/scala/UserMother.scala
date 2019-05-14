object UserMother {
  def apply(
    id: String = UserIdMother.random.value.toString,
    name: String = UserNameMother.random.value,
    accessLevel: Int = UserAccessLevelMother.random.value
  ): User = User(id, name, accessLevel)

  def random: User = apply()
}
