from django import forms
from .models import #MODELNAME

class PoSForm(forms.Form):
	mealSelector = forms.ChoiceField(
		required=True,
		chioces=(),
		widget=forms.Select(
			aatrs={'id':'mealSelector',
			'onChange':'##dunno##'}))


class DataEntryForm(forms.Form):
	mealName = forms.CharField(
		label='name of meal:',
		widget=forms.TextInput(
		attrs={'id':'mealNameTextBox'}))

class StatsForm(forms.Form):

class PredictForm(forms.Form):

