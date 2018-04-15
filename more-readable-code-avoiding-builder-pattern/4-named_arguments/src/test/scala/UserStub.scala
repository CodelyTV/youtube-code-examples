object UserStub {
  def apply(
    id: String = UserIdStub.random.value.toString,
    name: String = UserNameStub.random.value,
    accessLevel: Int = UserAccessLevelStub.random.value
  ): User = User(id, name, accessLevel)

  def random: User = apply()
}
