ORM. Теоритический вопрос:
Добавим новое поле пользователю experience. Есть функция, в которой:

Будет извлекаться пользователь и сохраняться в переменную $user = User::find(1)
Дальше функция выводит experience
Параллельно с работой функции асинхронный метод меняет опыт на случайное число каждые несколько секунд
В первой функции ещё раз выводится спустя промежуток времени опыт пользователя. Каким будет этот вывод?

Ответ: В выводе будет то значение, которое было получено изначально в переменную $user