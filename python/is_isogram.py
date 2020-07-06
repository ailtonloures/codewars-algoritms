def is_isogram(string):
    word = str(string).lower()
    arrString = list(word)
    wordList = []

    if word == "":
         return True

    for letter in arrString:
        if word.count(letter) > 1:
            wordList.append(letter)
        
    if len(wordList) > 1:
        return False

    return True

is_isogram("")