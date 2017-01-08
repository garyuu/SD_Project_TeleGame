import json
import player

class Room:
    def __init__(self, name, hash_code, settings):
        self.name = name
        self.hash_code = hash_code
        self.settings = json.parse(settings)
        self.players = []
        self.ingame = False
        self.turn = 0

    def player_join(self, player_name):
        self.players.append(player.Player(player_name))

    def player_ready(self, player_name):
        for i in range(len(self.players)):
            if self.players[i].name == player_name:
                self.players[i].ready()

    def player_unready(self, player_name):
        for i in range(len(self.players)):
            if self.players[i].name == player_name:
                self.players[i].unready()

    def player_all_ready(self):
        for i in range(len(self.players)):
            if not self.players[i].ready:
                return False
        return True

    def player_clear_ready(self):
        for i in range(len(self.players)):
            self.players[i].unready()

    def submit_picture(self, player_name, picture):
        for i in range(len(self.players)):
            if self.players[i].name == player_name:
                self.players[i].ready()
                j = (i - self.turn) % len(self.players)
                self.players[j].add_picture(picture)

    def end_round(self):
        self.turn += 1
        result = {}
        if self.turn == len(self.players):
            pic_array = []
            for i in len(self.players):
                result[self.players[i].name] = pic_array
                pic_array.append(self.players[i].pictures)
        else
            for i in len(self.players):
                j = (i - self.turn) % len(self.players)
                result[self.players[i].name] = self.players[j].pictures[-1]
        self.player_clear_ready()
        return result

    def game_start(self):
        self.ingame = True
        result = {}
        for i in range(len(self.players)):
            result[self.players[i].name] = 'startgame'
        self.player_clear_ready()
        return result
